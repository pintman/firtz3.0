.player {
    text-align: center;
}

.player iframe {
	background: #fff;
}

@media (min-width: 960px) {
	.article-player {
		padding: 0 0 40px 0;
	}
	.wp-position {
		-webkit-animation: mymove infinite; /* Safari 4.0 - 8.0 */
		-webkit-animation-duration: 2s; /* Safari 4.0 - 8.0 */
		animation: mymove infinite;
		animation-duration: 2s;

		padding: 0 16px 10px 16px;
		background: <?php echo $templatevars['color']; ?>;
	}
}

@media (min-width: 1000px) {
	.article-player {
		padding: 0 40px 0 40px;
	}
	.wp-position {
		-webkit-animation: mymove infinite; /* Safari 4.0 - 8.0 */
		-webkit-animation-duration: 2s; /* Safari 4.0 - 8.0 */
		animation: mymove infinite;
		animation-duration: 2s;

		padding: 0 16px 10px 16px;
		background: <?php echo $templatevars['color']; ?>;
	}
}