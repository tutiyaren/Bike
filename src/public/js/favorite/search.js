document.addEventListener('DOMContentLoaded', function() {
    
    const foodArea = document.getElementById('food_area');
    if (foodArea) {
        foodArea.addEventListener('change', function() {
            document.getElementById('foodSearchForm').submit();
        });
    }

    const foodGenre = document.getElementById('food_genre');
    if (foodGenre) {
        foodGenre.addEventListener('change', function() {
            document.getElementById('foodSearchForm').submit();
        });
    }

    const sceneryArea = document.getElementById('scenery_area');
    if (sceneryArea) {
        sceneryArea.addEventListener('change', function() {
            document.getElementById('scenerySearchForm').submit();
        });
    }

    const sceneryGenre = document.getElementById('scenery_genre');
    if (sceneryGenre) {
        sceneryGenre.addEventListener('change', function() {
            document.getElementById('scenerySearchForm').submit();
        });
    }
});
