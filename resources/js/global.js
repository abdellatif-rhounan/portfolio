window.onload = () => {
	const navLinks = document.querySelectorAll("#navbarNav .nav-link");
	const sections = document.body.querySelectorAll(".portfolio-section");
	const secData = [];

	// ======= Data of All Sections ======
	sections.forEach((el) => {
		let obj = {};
		obj.id = el.id;
		obj.startPos = el.offsetTop - 55;
		obj.endPos = obj.startPos + el.offsetHeight;
		secData.push(obj);
	});

	function checkActiveLink() {
		const sPos = window.scrollY;
		// ========= Header Active Link =======
		let i = 0;
		secData.forEach((el) => {
			if (sPos >= el.startPos && sPos < el.endPos) {
				navLinks.forEach((link) => {
					link.classList.remove("active");
				});
				navLinks[i].classList.add("active");
			}
			i++;
		});
	}

	// ======= Initial Scroll Check ========
	checkActiveLink();

	// ======= Scroll Change ========
	window.onscroll = () => {
		checkActiveLink();
	};
};
