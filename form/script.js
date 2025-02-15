document.getElementById('myForm').addEventListener('submit', function(event) {
    let name = document.getElementById('name').value;
    let age = document.getElementById('age').value;
  
    if (name.length < 9) {
      alert('Name must be at least 9 characters long.');
      event.preventDefault();
    }
  
    if (age < 18) {
      alert('Age must be at least 18.');
      event.preventDefault();
    }
  });
  