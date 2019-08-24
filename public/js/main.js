var links = document.querySelectorAll('[data-link]');

links.forEach(element => {
    element.addEventListener('click', function() {
        console.log(this.dataset.link);
        var link = this.dataset.link;
        document.getElementById('content-loader').innerHTML = 'The link [' + link + '] has been clicked';
    });
});