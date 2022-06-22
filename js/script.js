document.addEventListener("DOMContentLoaded", function()
{
    let navMembre = document.getElementsByClassName("navMembre");
    let artMembre = document.getElementsByClassName("textarticle");
    let listArtMembre = document.getElementsByClassName("listArtMembre");
    
    navMembre.addEventListener("click", function()
    {
        artMembre.classList.add('hidden');
        listArtMembre.style.display="block";
    })
})

