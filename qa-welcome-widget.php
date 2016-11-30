<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo qa_path_to_root() ?>/qa-plugin/Welcome-Widget/welcome-widget.css">
<script type="text/javascript" href="<?php echo qa_path_to_root() ?>/qa-plugin/Welcome-Widget/js/qa-welcome-widget.js"></script>
<?php

class qa_welcome_widget {

    function allow_template($template)
    {
        return true;
    }

    function allow_region($region)
    {
        return true;
    }

    function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
    {

    	echo 	'<div class="ww-wrapper">';
    	echo			'<p id="ww-heading">'.qa_lang_html('plugin_ww/heading_option').'</p>';
    	echo				'<table class="ww-box">';
		echo					'<tr>';
		echo						'<td class="ww-question"><i class="fa fa-question-circle" aria-hidden="true"></i>';
		echo						'<p>'.qa_lang_html('plugin_ww/first_option').'</p>';
		echo						'<p><a href="/ask" class="ww-button">Ask a Question</a></p></td>';

		echo						'<td class="ww-reply"><i class="fa fa-comment" aria-hidden="true"></i>';
		echo						'<p>'.qa_lang_html('plugin_ww/second_option').'</p>';
		echo						'<p><a href="/questions" class="ww-button">View Questions</a></p></td>';

		echo						'<td class="ww-vote"><i class="fa fa-thumbs-up" aria-hidden="true"></i>';
		echo						'<p>'.qa_lang_html('plugin_ww/third_option').'</p>';
		echo						'<p><a href="/questions" class="ww-button">View Questions</a></p></td>';
		echo					'</tr>';
		echo				'</table>';
		echo 	'</div>';
		echo           '<ul class="ww-topnav" id="ww-myTopnav">
							<li><p>Menu -></p></li>
							<li><a href="/questions">Recent</a></li>
							<li><a href="/hot">Hot</a></li>
							<li><a href="/questions?sort=votes">Most Votes</a></li>
							<li><a href="questions?sort=answers">Most Answers</a></li>
							<li><a href="questions?sort=views">Most Views</a></li>
							<li class="icon">
							    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
							</li>
						</ul>';
    }
}
