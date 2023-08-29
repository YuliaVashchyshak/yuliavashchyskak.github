const result = document.querySelector(".result");
const firstValue = document.querySelector(".first-value");
const secondValue = document.querySelector(".second-value");
const spiner = document.querySelector(".spiner-wrap");
const clearBtn = document.querySelector(".clear");
const resultBtn = document.querySelector(".get_result");
const tost = document.querySelector(".tost__wrapper");
const tostMessage = document.querySelector(".tost__message");

clearBtn.addEventListener("click", () =>
	[firstValue, secondValue, result].forEach((input) => {
		input.value = "";
	})
);

jQuery(function ($) {
	$(".get_result").click(function () {
		const data = {
			firstValue: firstValue.value,
			secondValue: secondValue.value,
			action: "get_calc",
		};

		spiner.classList.add("active");
		resultBtn.classList.add("disabled");

		$.ajax({
			url: "/wp-admin/admin-ajax.php",
			type: "POST",
			data: data,

			success: function (data) {
				spiner.classList.remove("active");
				resultBtn.classList.remove("disabled");

				const parseData = JSON.parse(data);

				if (parseData.code == 200) {
					result.value = parseData.result;
				}
				if (parseData.code == 400) {
					tostMessage.textContent = parseData.message;
					tost.classList.add("active");
					setTimeout(() => {
						tost.classList.remove("active");
					}, 3000);
				}
				getPosts();
			},
		});
	});
});


//== search ==//
document.querySelector(".filer__search").addEventListener("click", () => {
	getPosts();
});
//== search ==//

const postsWrapper = document.querySelector(".posts__wrapper");
const getPosts = () => {
	const search = document.querySelector(".filter__input").value;
	const data = {
		action: "get_posts_refresh",
	};
	if (search) {
		data.search = search;
	}
	$.ajax({
		url: "/wp-admin/admin-ajax.php",
		type: "POST",
		data: data,
		success: function (data) {
			postsWrapper.innerHTML = data;
			deletePosts();

			if(document.querySelectorAll(".post__wrapper").length < 10) {
				document.querySelector(".btn-loadmore").remove();
			}

		},
	});
};

const deletePosts = () => {
	const deletePostBtns = document.querySelectorAll(".delete_post");

	deletePostBtns.forEach((button) => {
		button.addEventListener("click", () => {
			const postId = button.getAttribute("data-id");

			const data = {
				action: "delete_post",
				id: postId,
			};
			$.ajax({
				url: "/wp-admin/admin-ajax.php",
				type: "POST",
				data: data,

				success: function (data) {
					getPosts();
					tostMessage.textContent = "Пост успішно видалено";
					tost.classList.add("active");
					setTimeout(() => {
						tost.classList.remove("active");
					}, 3000);
				},
			});
		});
	});
};

// start load more js
jQuery(function ($) {
	const loadMoreBtn = document.querySelector(".btn-loadmore");


	loadMoreBtn.addEventListener("click", () => {
		loadMoreBtn.innerHTML = "Load..";
	const search = document.querySelector(".filter__input").value;

		
		let data = {
			action: "loadmore",
			query: loadMoreBtn.getAttribute("data-param-posts"),
			page: this_page,
			tpl: loadMoreBtn.getAttribute("data-tpl"),
		};
		if (search) {
			data.search = search;
		}
		
		$.ajax({
			url: "/wp-admin/admin-ajax.php",
			data: data,
			type: "POST",
			success: function (data) {
				if (data) {
					loadMoreBtn.innerHTML = "Load more";
					document.querySelector(".posts__wrapper").innerHTML += data;
					this_page++;
					if (this_page == loadMoreBtn.getAttribute("data-max-pages")) {
						loadMoreBtn.remove();
					}
				} else {
					loadMoreBtn.remove();
				}
			},
		});
	});
});
// end load more js



// 1. якшо відповідь 200, тоді виводимо результтат в інпут +
// 2. якшо відповідь 300, то виводимо месседж в попап і очищуєм інпути
// 3. добавити лоадер в кнопку, як в ант дизайні, шоб крутився поки загрузка, сстилі можуть бути не як в ант +
// 4. замутити гарні стилі до всього +
// ------------------------

/////////////////////
// 1. Після того, як отримала дані з бекенду, посилати аджакс запит на оновлення постаё

// 1. викликати в js getPosts,
// 2. послати аджакс запит на екшин get_posts
// отримати відповідь і вставити її в враппер...

// створити екшин get_get який буде віддавати всі пости

/////
// 1. добавити інпут для пошуку
// 2. після введдення 3 символів викликликати аджаксом екшин get_search
