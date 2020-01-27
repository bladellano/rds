<style>
	
	@keyframes navLinkFade {
		from {
			opacity: 0;
			transform: translateX(50px);
		}
		to {
			opacity: 1;
			transform: translateX(0px);
		}
	}
	.toggle .line1 {
		transform: rotate(-45deg) translate(-5px, 6px);
	}

	.toggle .line2 {
		opacity: 0;
	}

	.toggle .line3 {
		transform: rotate(45deg) translate(-5px, -6px);
	}

	.anime{
		animation: navLinkFade 0.1s ease forwards 2s;
	}
</style>

<div class="line3 anime">abc</div>