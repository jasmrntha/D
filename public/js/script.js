const content = [
    {
        image: 'assets/uts/StarRail_Image_1696141531.png',
        text: 'This is the Trailblazer.',
    },
    {
        image: 'assets/uts/StarRail_Image_1697858717.png',
        text: 'This is Lynx.',
    },
    {
        image: 'assets/uts/StarRail_Image_1697858971.png',
        text: 'This is Sushang.',
    },
];

let currentIndex = 0;

function changeContent(direction) {
    if (direction === 'prev') {
        currentIndex = (currentIndex - 1 + content.length) % content.length;
    } else if (direction === 'next') {
        currentIndex = (currentIndex + 1) % content.length;
    }

    const changeableImg = document.getElementById('changeable_img');
    const changeableText = document.getElementById('changeable_text');

    changeableImg.src = content[currentIndex].image;
    changeableText.textContent = content[currentIndex].text;
}
