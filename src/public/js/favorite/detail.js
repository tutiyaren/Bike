document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modalFavoriteDetail');
    const closeButton = document.getElementById('closeFavoriteDetail');
    const { body } = document;
    const MODAL_CLASS = 'is-modal';

    const favoriteCards = document.querySelectorAll('.favorite-card');
    favoriteCards.forEach(card => {
        card.addEventListener('click', function () {
            const images = card.querySelectorAll('.favorite-card__image');
            const detailImagesContainer = modal.querySelector('.detail-photo__images');
            detailImagesContainer.innerHTML = ''; // 画像コンテナをクリア

            // data-* 属性から情報を取得
            const title = card.getAttribute('data-title');
            const description = card.getAttribute('data-description');
            const area = card.getAttribute('data-area');
            const genre = card.getAttribute('data-genre');
            const profileImage = card.getAttribute('data-profile-image');
            const profileName = card.getAttribute('data-profile-name');
            const profileAge = card.getAttribute('data-profile-age');
            const profileGenre = card.getAttribute('data-profile-genre');

            // モーダルにデータを設定
            modal.querySelector('.detail-content__title').textContent = title;
            modal.querySelector('.detail-content__text').textContent = description;
            modal.querySelector('.detail-content__info-area').textContent = area;
            modal.querySelector('.detail-content__info-genre').textContent = genre;
            modal.querySelector('.detail-content__profile-inner--image').src = profileImage;
            modal.querySelector('.detail-content__profile-name').textContent = profileName;
            modal.querySelector('.detail-content__profile-name--other-age').textContent = profileAge;
            modal.querySelector('.detail-content__profile-name--other-genre').textContent = profileGenre;

            // 画像をモーダルに追加
            images.forEach((img) => {
                const newImg = document.createElement('img');
                newImg.src = img.src;
                newImg.className = 'detail-photo__image';
                newImg.style.display = 'none'; // 初期は非表示
                detailImagesContainer.appendChild(newImg);
            });

            // 最初の画像を表示
            if (detailImagesContainer.firstChild) {
                detailImagesContainer.firstChild.style.display = 'block';
            }

            // スライドショーのセットアップ
            let currentIndex = 0;
            const detailImages = detailImagesContainer.querySelectorAll('.detail-photo__image');

            const slideImages = () => {
                detailImages[currentIndex].style.display = 'none';
                currentIndex = (currentIndex + 1) % detailImages.length;
                detailImages[currentIndex].style.display = 'block';
            };

            setInterval(slideImages, 4000);

            // モーダルを表示
            body.classList.add(MODAL_CLASS);
            modal.showModal();
        });
    });

    // モーダルを閉じる
    closeButton.addEventListener('click', () => {
        body.classList.remove(MODAL_CLASS);
        modal.close();
    });

    // モーダルのキャンセル
    modal.addEventListener('cancel', () => {
        body.classList.remove(MODAL_CLASS);
    });

    // モーダルの外側クリックで閉じる
    modal.addEventListener('click', (e) => {
        if (!e.target.closest('.dialog-inner')) {
            body.classList.remove(MODAL_CLASS);
            modal.close();
        }
    });
});


