let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var instagramLink = document.getElementById('instagramLink');

    // Add a click event listener
    instagramLink.addEventListener('click', function(event) {
      // Prevent the default behavior (opening the link immediately)
      event.preventDefault();

      // Open the Instagram profile link in a new tab or window
      window.open(instagramLink.href, '_blank');
    });


var instagramLink = document.getElementById('instagramLink');

    // Add a click event listener
    instagramLink.addEventListener('click', function(event) {
      // Prevent the default behavior (opening the link immediately)
      event.preventDefault();

      // Open the Instagram profile link in a new tab or window
      window.open(instagramLink.href, '_blank');
    });


    function addReview() {
        var name = document.getElementById('name').value;
        var rating = document.getElementById('rating').value;
        var comment = document.getElementById('comment').value;
    
        // Assuming reviewContainer is where you want to display the reviews
        var reviewContainer = document.getElementById('reviewContainer');
    
        // Create review element
        var reviewElement = document.createElement('div');
        reviewElement.classList.add('review-item');
        
        // Populate review element
        reviewElement.innerHTML = `
            <div><strong>Name:</strong> ${name}</div>
            <div><strong>Rating:</strong> ${rating}</div>
            <div><strong>Comment:</strong> ${comment}</div>
        `;
    
        // Append review element to review container
        reviewContainer.appendChild(reviewElement);
    
        // Clear input fields
        document.getElementById('name').value = '';
        document.getElementById('rating').value = '1';
        document.getElementById('comment').value = '';
    }
    