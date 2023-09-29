const cross = document.querySelector('.bi-x-circle');
cross.addEventListener('click',() => {
    const searchInput = document.getElementById('search');
    searchInput.value = ''
    const list = document.getElementById('list').getElementsByTagName('a');

    const searchTerm = '';
        
        for (let i = 0; i < list.length; i++) {
            const item = list[i].textContent.toLowerCase();
            if (item.includes(searchTerm)) {
                list[i].style.display = 'block';
            } else {
                list[i].style.display = 'none';
            }
        }
})