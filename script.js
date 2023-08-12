function submitForm(event) {
    event.preventDefault();
  
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
    
    if (username.trim() === '' || password.trim() === '') {
      alert('Please fill in all fields.');
      return;
    }
  
    
    const validUsername = 'admin'; 
    const validPassword = '123'; 
  
    if (username === validUsername && password === validPassword) {
      
      window.location.href = 'login2.php';
    } else {
      alert('Invalid username or password.');
    }
}
  