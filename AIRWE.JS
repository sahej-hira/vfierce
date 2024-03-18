var imgContainer = document.getElementById('img');
var textContainer = document.getElementById('text');
var slides = ['images/Free-education.jpg', 'images/Learning.jpg', 'images/Trained-staff.jpg'];
var headings = ["Free of Cost Education", " providing Holistic Learning", "Provisioned of trained staff"];
var texts = [
    "Limited access to education is a significant obstacle hindering the growth opportunities of young girls in society. AIRWE is dedicated to using education as a means to dismantle the barriers of poverty. Our mission is to empower young girls to transform their lives by offering free secondary and senior secondary education.",
    "This program combines spiritual and modern education, aiming to provide a holistic approach to learning. We offer formal education alongside Gurmat education and life skills to empower young girls for the future. Our emphasis is on enhancing English language proficiency, enabling these young women to access opportunities in the contemporary world.",
    "Our team collectively shares a common dream: to empower young girls in rural India and break the barriers of poverty. To achieve this, our dedicated and trained staff works tirelessly, utilizing the latest technology at our disposal to educate and enable these girls. We place particular emphasis on English language training and life skill development."
];
var currentIndex = 0;

function slider() {
    imgContainer.innerHTML = "<img src='" + slides[currentIndex] + "'>";
    textContainer.innerHTML = "<h3>" + headings[currentIndex] + "</h3><p>" + texts[currentIndex] + "</p>";
    currentIndex = (currentIndex + 1) % slides.length;
}

setInterval(slider, 3000);
