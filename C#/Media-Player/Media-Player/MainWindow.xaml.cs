using System;
using System.Windows;
using System.Windows.Input;
using System.Windows.Media; // Necessary for using MediaPlayer
using System.Windows.Media.Imaging;
using System.Windows.Threading; // Necessary for using DispatcherTimer
using Microsoft.Win32; // Necessary for using OpenFileDialog

namespace Media_Player
{
    // To make the program work it is required to install TagLib

    /// <summary>
    /// Interaction logic for MainWindow.xaml.
    /// This class handles the main window operations of the media player application.
    /// </summary>
    public partial class MainWindow : Window
    {
        private MediaPlayer mediaPlayer = new MediaPlayer(); // MediaPlayer instance for playing media files
        private DispatcherTimer timer; // Timer to update the UI based on the media playback
        private string currentFilePath; // Stores the path of the currently loaded media file

        public MainWindow()
        {
            InitializeComponent();
            timer = new DispatcherTimer();
            timer.Interval = TimeSpan.FromSeconds(1); // Set the timer to tick every second
            timer.Tick += Timer_Tick; // Subscribe to the Tick event
            timer.Start(); // Start the timer


            // Subscribe to playback control events
            playbackControls.PlayClicked += PlaybackControls_PlayClicked;
            playbackControls.PauseClicked += PlaybackControls_PauseClicked;
            playbackControls.StopClicked += PlaybackControls_StopClicked;

        }
        // Assing action to the event
        private void PlaybackControls_PlayClicked(object sender, RoutedEventArgs e)
        {
            mediaPlayer.Play();
        }

        private void PlaybackControls_PauseClicked(object sender, RoutedEventArgs e)
        {
            mediaPlayer.Pause();
        }

        private void PlaybackControls_StopClicked(object sender, RoutedEventArgs e)
        {
            mediaPlayer.Stop();
        }

        private void Exit_Click(object sender, RoutedEventArgs e)
        {
            Close();
        }
        /// <summary>
        /// Handles the timer's Tick event.
        /// Updates the UI to reflect the current playback position.
        /// </summary>
        private void Timer_Tick(object sender, EventArgs e)
        {
            if (mediaPlayer != null && mediaPlayer.NaturalDuration.HasTimeSpan && !songSlider.IsMouseCaptureWithin)
            {
                var currentPosition = mediaPlayer.Position;
                songSlider.Value = currentPosition.TotalSeconds; // Update the slider to match the current position

                // Format and display the current playback position
                currentTimeDisplay.Text = $"{currentPosition.Minutes}:{currentPosition.Seconds:D2}";
            }
        }

        /// <summary>
        /// Opens a dialog for the user to select a media file, then loads and plays the selected file.
        /// </summary>
        private void openFile_Click(object sender, RoutedEventArgs e)
        {
            OpenFileDialog fileDlg = new OpenFileDialog();
            fileDlg.Filter = "MP3 files (*.mp3)|*.mp3|All files (*.*)|*.*";
            bool result = (bool)fileDlg.ShowDialog();
            if (result == true)
            {
                string filename = fileDlg.FileName;
                mediaPlayer.Open(new Uri(filename));
                mediaPlayer.MediaOpened += MediaPlayer_MediaOpened;
                currentFilePath = filename;

                var file = TagLib.File.Create(filename);

                // Display song title
                string title = file.Tag.Title;
                currentSongDisplay.Text = !string.IsNullOrEmpty(title) ? title : System.IO.Path.GetFileName(filename);

                // Attempt to display album art
                if (file.Tag.Pictures.Length > 0)
                {
                    var bin = (byte[])(file.Tag.Pictures[0].Data.Data);
                    using (var ms = new System.IO.MemoryStream(bin))
                    {
                        var image = new BitmapImage();
                        image.BeginInit();
                        image.CacheOption = BitmapCacheOption.OnLoad; // To save the image in memory
                        image.StreamSource = ms;
                        image.EndInit();
                        albumArtImage.Source = image; // Set the Image control source to display the album art
                    }
                }
                else
                {
                    albumArtImage.Source = null; // Clear the image if no album art is present
                }
            }
        }

        /// <summary>
        /// Called when the media is successfully opened. Updates the UI to display media information.
        /// </summary>
        private void MediaPlayer_MediaOpened(object sender, EventArgs e)
        {
            if (mediaPlayer.NaturalDuration.HasTimeSpan)
            {
                TimeSpan duration = mediaPlayer.NaturalDuration.TimeSpan;
                Dispatcher.Invoke(() =>
                {
                    durationDisplay.Text = $"{duration.Minutes}:{duration.Seconds:D2}"; // Display the duration
                    songSlider.Maximum = duration.TotalSeconds; // Set the maximum value of the slider
                });
            }
        }

        
        /// <summary>
        /// Updates the media playback position based on the slider's value.
        /// </summary>
        private void SongSlider_ValueChanged(object sender, RoutedPropertyChangedEventArgs<double> e)
        {
            if (mediaPlayer != null && mediaPlayer.NaturalDuration.HasTimeSpan)
            {
                mediaPlayer.Position = TimeSpan.FromSeconds(songSlider.Value); // Seek to the new position
            }
        }

        /// <summary>
        /// Opens the TagEditor window to allow editing of the current media file's tags.
        /// Closes the media file to release it before editing.
        /// </summary>
        private void TagCurrentMP3_Click(object sender, RoutedEventArgs e)
        {
            if (!string.IsNullOrEmpty(currentFilePath))
            {
                mediaPlayer.Close(); // Close the media player to release the file
                TagEditor tagEditor = new TagEditor(currentFilePath); // Open the tag editor
                tagEditor.ShowDialog(); // Show the tag editor as a modal dialog

                // Reopen the file after editing
                mediaPlayer.Open(new Uri(currentFilePath));
                          
            }
            else
            {
                MessageBox.Show("Please load an MP3 file first.");
            }
        }
    }
}
