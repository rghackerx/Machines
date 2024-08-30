document.addEventListener('DOMContentLoaded', () => {
    const uploadButton = document.getElementById('uploadButton');
    const popup = document.getElementById('popup');
    const closePopup = document.getElementById('closePopup');
    const loadingOverlay = document.getElementById('loadingOverlay');

    uploadButton.addEventListener('click', () => {
        // Show the loading spinner
        loadingOverlay.style.display = 'flex';

        // Hide the loading spinner and show the popup after a 5-second delay
        setTimeout(() => {
            loadingOverlay.style.display = 'none';
            popup.style.display = 'flex';
        }, 8000);
    });

    closePopup.addEventListener('click', () => {
        popup.style.display = 'none';
    });
});
