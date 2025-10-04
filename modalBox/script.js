  // Open the modal and set the image source and description
  function openModal(imageSrc, description) {
    document.getElementById('modal').style.display = 'block';
    document.getElementById('modal-image').src = imageSrc;
    document.getElementById('modal-description').innerText = description;
  }

  // Close the modal
  function closeModal() {
    document.getElementById('modal').style.display = 'none';
    document.getElementById('modal-image').src = '';
    document.getElementById('modal-description').innerText = '';
  }