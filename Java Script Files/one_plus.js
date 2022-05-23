const box1 = document.getElementById("box1");
console.log(box1);
const box2 = document.getElementById('box2');
const box3 = document.getElementById('box3');
const box4 = document.getElementById('box4');
const box5 = document.getElementById('box5');
const box6 = document.getElementById('box6');

const img = document.getElementById('change_img');
const img_src = document.getElementById('change_img').src;


function change_box2()
{
    img.src = "Images/one_plus/box2.jpg";
    
}
function change_box3()
{
    img.src = "Images/one_plus/box3.jpg";
}
function change_box4()
{
    img.src = "Images/one_plus/box4.jpg";
}
function change_box5()
{
    img.src = "Images/one_plus/box5.jpg";
}

function change_box6()
{
    img.src = "Images/one_plus/box6.jpg";
}

function undo()
{
    img.src = "Images/one_plus/front.jpg";
}


box2.addEventListener('mouseover', change_box2)
{}
box2.addEventListener('mouseout', undo)
{}

box3.addEventListener('mouseover', change_box3)
{}
box3.addEventListener('mouseout', undo)
{ }

box4.addEventListener('mouseover', change_box4)
{}
box4.addEventListener('mouseout', undo)
{}

box5.addEventListener('mouseover', change_box5)
{}
box5.addEventListener('mouseout', undo)
{}

box6.addEventListener('mouseover', change_box6)
{}
box6.addEventListener('mouseout', undo)
{}


