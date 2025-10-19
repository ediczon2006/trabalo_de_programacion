document.querySelector('.search-bar').addEventListener('input', function () {
    const searchValue = this.value.toLowerCase();
    const courses = document.querySelectorAll('.course-item');

    courses.forEach(course => {
        const courseTitle = course.querySelector('h3').textContent.toLowerCase();
        if (courseTitle.includes(searchValue)) {
            course.style.display = 'block';
        } else {
            course.style.display = 'none';
        }
    });
});
