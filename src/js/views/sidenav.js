const sideMenus = document.querySelectorAll('.sidemenu__list');
const sideMenusContainer = document.querySelector('.sidemenu');

sideMenusContainer.addEventListener('click', function (e) {
    const clicked = e.target.closest('.sidemenu__list');
    // console.log(clicked);

    // 오류 메시지 처리
    if (!clicked) return;

    sideMenus.forEach((m) => m.classList.remove('sidemenu-active'));
    clicked.classList.add('sidemenu-active');
});
