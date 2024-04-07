using System.Windows;
using System.Windows.Controls;

namespace Media_Player
{

    public partial class PlaybackControls : UserControl
    {

        // These events allow the UserControl to notify other parts of the application when the play, pause, or stop buttons are clicked.

        // Event that is raised when the Play button is clicked.
        public event RoutedEventHandler PlayClicked;

        // Event that is raised when the Pause button is clicked.
        public event RoutedEventHandler PauseClicked;

        // Event that is raised when the Stop button is clicked.
        public event RoutedEventHandler StopClicked;

       
    
        public PlaybackControls()
        {
            InitializeComponent();
        }

  
        // It raises the PlayClicked event, notifying subscribers that the Play button has been clicked.
        private void PlayButton_Click(object sender, RoutedEventArgs e)
        {
            PlayClicked?.Invoke(sender, e);
        }

      
        // It raises the PauseClicked event, notifying subscribers that the Pause button has been clicked.
        private void PauseButton_Click(object sender, RoutedEventArgs e)
        {
            PauseClicked?.Invoke(sender, e);
        }


        // It raises the StopClicked event, notifying subscribers that the Stop button has been clicked.
        private void StopButton_Click(object sender, RoutedEventArgs e)
        {
            StopClicked?.Invoke(sender, e);
        }

    }
}
