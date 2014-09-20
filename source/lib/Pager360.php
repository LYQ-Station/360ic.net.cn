<?php

/**
 * Description of Pager360
 *
 * @author lyq
 */
class Pager360 extends PageDivide
{
    /**
	 * 获取分页代码
	 *
	 * @param string $bas_url 基地址
	 * @param string $query 基地址外部分（不含page_no） 
	 * @param string $style 分页ul的css类名
	 * @param int $list_width
	 * @return string
	 */
	public function get_navigator_str ($bas_url = '', $query = null, $style = '', $list_width = 3)
	{
		$nav_info = $this->get_navigator();

			//检查$base_url末尾的‘/’
		$sp = '/' == $bas_url{strlen($bas_url)-1} ? '' : '/';

		$div = '<div class="pagination pagination-centered"><ul>';
		
			//如果当前为第一页，则没有上一页
		if ($nav_info->curr_page_no > 1)
			$div .= "<li><a href=\"{$bas_url}{$query}{$sp}page_no/{$nav_info->prev_page}\">&lt;</a></li>";

			//确定序号栏
		$min = $this->curr_page_no - $list_width;
		if (0 >= $min)
		{
			$min = 1;
			$max = $min + $list_width * 2;
		}
		else
		{
			$max = $this->curr_page_no + $list_width;
		}
		
		if ($max > $this->total_pages)
		{
			$max = $this->total_pages;
			$min = $max - $list_width * 2;
			$min = 0 >= $min ? 1 : $min;
		}

			//打印序号列
		for ($i=$min; $i<=$max; $i++)
		{
			if ($i == $this->curr_page_no)
				$no .= '<li><a class="on" href="#">'.$i.'</a></li>';
			else
				$no .= "<li><a href=\"{$bas_url}{$query}{$sp}page_no/{$i}\">$i</a></li>";
		}
		$div .= $no;
		
			//如果当前为最后页，则没有下一页
		if ($nav_info->curr_page_no < $this->total_pages)
			$div .= "<li><a href=\"{$bas_url}{$query}{$sp}page_no/{$nav_info->next_page}\">&gt;</a></li>";

		$div .= '</ul></div>';
		
		return $div;
	}
}
