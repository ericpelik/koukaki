window.addEventListener("scroll",()=>{
    //console.log('bonjour nuage');

    const scrollY = window.scrollY;

    const cloud = document.getElementById("cloud");
    //console.log(cloud);

    const speedCloud = 0.4;

    const position = 800;

    const mouveCloud = -scrollY * speedCloud + position;
 console.log(mouveCloud)
    cloud.style.transform = `translateX(${mouveCloud}px)`;
})
