function openForm() {
    document.querySelector('.review-form').style.display = 'block';
}

document.getElementById('reviewForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    fetch('submit_review.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert('Thank you for your review!');
        document.getElementById('reviewForm').reset();
    })
    .catch(error => console.error('Error:', error));
});