
const userEndpoint = 'https://jsonplaceholder.typicode.com/users';



function userRegister() {
    // Event listener for form submission
    document.getElementById('registerForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from reloading the page
  
      // Get values from input fields
      const email = document.getElementById('emailRegister').value;
      const username = document.getElementById('usernameRegister').value;
      const password = document.getElementById('passwordRegister').value;
  
      // Validate other fields
      if (!email || !username || !password) {
        alert('Please fill all fields!');
        return;
      }
  
      // Prepare data to send
      const registrationData = {
        email: email,
        username: username,
        password: password,
      };
  
      // Make the fetch API request to register the user
      fetch(userEndpoint, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(registrationData),
      })
      .then(response => response.json()) // Parse the response as JSON
      .then(data => {
        console.log('Response Data:', data); // Log the response data
        alert('Registration successful! Check the console for response.');
      })
      .catch(error => {
        console.error('Error:', error);
        alert('There was an error with the registration!');
      });
    });
  }
  
  // Call the function to initialize the form handling
  userRegister();
  


