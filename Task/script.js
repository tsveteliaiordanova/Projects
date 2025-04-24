const userList = document.getElementById('userList');
const searchInput = document.getElementById('search');
const modal = document.getElementById('modal');
const postsList = document.getElementById('postsList');
const closeModal = document.getElementById('closeModal');

let users = [];

async function fetchUsers() {
  try {
    const res = await fetch('https://jsonplaceholder.typicode.com/users');
    users = await res.json();
    displayUsers(users);
  } catch (err) {
    userList.innerHTML = '<li>Error loading users</li>';
  }
}

function displayUsers(filteredUsers) {
    const noUserMessage = document.getElementById('noUserMessage');
    userList.innerHTML = '';
  
    if (filteredUsers.length === 0) {
      noUserMessage.style.display = 'block';
      return;
    } else {
      noUserMessage.style.display = 'none';
    }
  
    filteredUsers.forEach(user => {
      const li = document.createElement('li');
      li.textContent = `${user.name} (${user.email})`;
      li.style.cursor = 'pointer';
      li.addEventListener('click', () => showUserPosts(user.id));
      userList.appendChild(li);
    });
  }
  

// ✅ Филтриране по имена, започващи с въведеното
searchInput.addEventListener('input', (e) => {
  const value = e.target.value.toLowerCase();
  const filtered = users.filter(user =>
    user.name.toLowerCase().startsWith(value)
  );
  displayUsers(filtered);
});

async function showUserPosts(userId) {
  postsList.innerHTML = '<li>Loading...</li>';
  modal.classList.remove('hidden');
  try {
    const res = await fetch(`https://jsonplaceholder.typicode.com/posts?userId=${userId}`);
    const posts = await res.json();
    postsList.innerHTML = '';
    posts.forEach(post => {
      const li = document.createElement('li');
      li.textContent = post.title;
      postsList.appendChild(li);
    });
  } catch {
    postsList.innerHTML = '<li>Error loading posts</li>';
  }
}

closeModal.addEventListener('click', () => {
  modal.classList.add('hidden');
});

fetchUsers();
