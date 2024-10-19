<script>
// JavaScript code
document.addEventListener('DOMContentLoaded', function() {
    // Function to handle form submission
    function handleFormSubmit(event) {
        event.preventDefault(); 
        const name = document.getElementById('name1').value;
        const email = document.getElementById('email1').value;

        
        if (name && email) {
            
            alert(`Thank you, ${name}! Your information has been submitted.`);
            
            document.getElementById('name1').value = '';
            document.getElementById('email1').value = '';
            document.getElementById('phone1').value = '';
        } else {
            alert('Please fill in all the required fields.');
        }
    }

    
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', handleFormSubmit);
    }
});
</script>