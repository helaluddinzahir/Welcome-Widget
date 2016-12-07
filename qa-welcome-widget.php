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

    	$themeobject->output('<div class="ww-wrapper">
					    		<div class="ww-icons-wrapper">
					    			<p id="ww-heading">'.qa_lang_html('plugin_ww/heading_option').'</p>
					    				<table class="ww-box">
											<tr>
												<td class="ww-first-block"><i class="fa fa-question-circle" aria-hidden="true"></i>
												<p>'.qa_lang_html('plugin_ww/first_option').'</p>
												<p><a href="/ask" class="ww-button">'.qa_lang_html('plugin_ww/first_button').'</a></p></td>

												<td class="ww-second-block"><i class="fa fa-comment" aria-hidden="true"></i>
												<p>'.qa_lang_html('plugin_ww/second_option').'</p>
												<p><a href="/questions" class="ww-button">'.qa_lang_html('plugin_ww/second_button').'</a></p></td>

												<td class="ww-third-block"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
												<p>'.qa_lang_html('plugin_ww/third_option').'</p>
												<p><a href="/questions" class="ww-button">'.qa_lang_html('plugin_ww/third_button').'</a></p></td>
											</tr>
										</table>
								</div>
							<ul class="ww-topnav" id="ww-myTopnav">
									<li><p>'.qa_lang_html('plugin_ww/nav_title').'</p></li>
									<li><a href="/questions">'.qa_lang_html('plugin_ww/first_nav').'</a></li>
									<li><a href="/hot">'.qa_lang_html('plugin_ww/second_nav').'</a></li>
									<li><a href="/questions?sort=votes">'.qa_lang_html('plugin_ww/third_nav').'</a></li>
									<li><a href="questions?sort=answers">'.qa_lang_html('plugin_ww/fourth_nav').'</a></li>
									<li><a href="questions?sort=views">'.qa_lang_html('plugin_ww/fifth_nav').'</a></li>
									<li class="icon">
									    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
									</li>
								</ul>
							</div>');
    }
}