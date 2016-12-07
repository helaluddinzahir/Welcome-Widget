<?php

class qa_welcome_widget {

	function allow_template($template)
    {
        return true;
    }

    function allow_region($region)
    {
        return ($region == 'full');
    }

    function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
    {
    	ob_start(); ?>
    			<div class="ww-wrapper">
    			<div class="ww-icons-wrapper">
    				<p id="ww-heading"><?php echo qa_lang_html('plugin_ww/heading_option') ?></p>
    					<table class="ww-box">
							<tr>
								<td class="ww-question"><i class="fa fa-question-circle" aria-hidden="true"></i>
								<p><?php echo qa_lang_html('plugin_ww/first_option') ?></p>
								<p><a href="/ask" class="ww-button"><?php echo qa_lang_html('plugin_ww/first_button') ?></a></p></td>

								<td class="ww-reply"><i class="fa fa-comment" aria-hidden="true"></i>
								<p><?php echo qa_lang_html('plugin_ww/second_option') ?></p>
								<p><a href="/questions" class="ww-button"><?php echo qa_lang_html('plugin_ww/second_button') ?></a></p></td>

								<td class="ww-vote"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
								<p><?php echo qa_lang_html('plugin_ww/third_option') ?></p>
								<p><a href="/questions" class="ww-button"><?php echo qa_lang_html('plugin_ww/third_button') ?></a></p></td>
							</tr>
						</table>
				</div>
    	            	<ul class="ww-topnav" id="ww-myTopnav">
							<li><p><?php echo "Menu ->" ?></p></li>
							<li><a href="/questions"><?php echo "Recent" ?></a></li>
							<li><a href="/hot"><?php echo "Hot" ?></a></li>
							<li><a href="/questions?sort=votes"><?php echo "Most Votes" ?></a></li>
							<li><a href="questions?sort=answers"><?php echo "Most Answers" ?></a></li>
							<li><a href="questions?sort=views"><?php echo "Most Views" ?></a></li>
							<li class="icon">
							    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
							</li>
						</ul>
				</div>
		<?php		
    }
}