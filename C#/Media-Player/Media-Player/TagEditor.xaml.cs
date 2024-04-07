using System;
using System.Windows;
using TagLib; // Required for accessing and modifying media file tags

namespace Media_Player
{
    /// <summary>
    /// Interaction logic for TagEditor.xaml.
    /// This window allows users to edit the tags (metadata) of a selected MP3 file.
    /// </summary>
    public partial class TagEditor : Window
    {
        private string mp3FilePath; // Holds the path to the currently loaded MP3 file

        /// <summary>
        /// Constructor for the TagEditor window.
        /// </summary>

        public TagEditor(string filePath)
        {
            InitializeComponent();
            mp3FilePath = filePath;
            LoadTagInfo(); // Load existing tag information from the file
        }

        /// <summary>
        /// Loads the existing tag information from the MP3 file and displays it in the UI.
        /// </summary>
        private void LoadTagInfo()
        {
            try
            {
                // Use TagLib to open the file and read its tags
                using (var file = TagLib.File.Create(mp3FilePath))
                {
                    // Display the current tag information in the respective text boxes
                    titleTextBox.Text = file.Tag.Title;
                    artistTextBox.Text = file.Tag.FirstAlbumArtist;
                    albumTextBox.Text = file.Tag.Album;
                    yearTextBox.Text = file.Tag.Year.ToString();
                }
            }
            catch (Exception ex)
            {
                // Show an error message if loading the tags fails
                MessageBox.Show($"Failed to load tags: {ex.Message}");
            }
        }

        /// <summary>
        /// Handles the click event of the Edit button. Saves the modified tag information back to the MP3 file.
        /// </summary>
        private void EditButton_Click(object sender, RoutedEventArgs e)
        {
            try
            {
                // Open the file again, this time for editing
                using (var file = TagLib.File.Create(mp3FilePath))
                {
                    // Update the file's tags based on the user's input
                    file.Tag.Title = titleTextBox.Text;
                    file.Tag.AlbumArtists = new string[] { artistTextBox.Text };
                    file.Tag.Album = albumTextBox.Text;
                    if (uint.TryParse(yearTextBox.Text, out uint year))
                    {
                        file.Tag.Year = year; // Only update the year if it's a valid number
                    }

                    file.Save(); // Save the changes to the file
                }
                // Inform the user that the tags were updated successfully
                MessageBox.Show("Tags updated successfully.");
            }
            catch (Exception ex)
            {
                // Show an error message if saving the tags fails
                MessageBox.Show($"Failed to save tags: {ex.Message}");
            }
            finally
            {
                // Close the TagEditor window
                this.Close();
            }
        }
    }
}
