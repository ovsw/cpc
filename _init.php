<?php 

function renderMenu ($menuPages,$page) {
	if (count($menuPages)) {
		foreach ($menuPages as $item){
			$url = $item->template == "link" ? $item->headline : $item->url;
			$target = $item->template == "link" ? ' target="_blank"' : "";
            $class = ($item === $page || $item == $page->rootParent) ? 'active' : "";
            if ($item->id == "1377") {
                $class = $class." bookNowTopLink";
            }
            
            echo "<li class='".ltrim($class, " ")."'><a href='".$url."'".$target.">".$item->title."</a></li>";
     	}
     }else{
     	echo "<li>no pages to display.</li>";
     }
}



function renderSideMenu ($menuPages,$page) {
    if (count($menuPages)) {
        foreach ($menuPages as $item){
            $url = $item->template == "link" ? $item->headline : $item->url;
            $target = $item->template == "link" ? ' target="_blank"' : "";
            $class = ($item === $page || $item == $page->rootParent) ? ' class="active"' : "";
            echo "<li".$class."><a href='".$url."'".$target."><span class='linkTextWrapper'>".$item->title."</span><span class='leftNail'></span><span class='rightNail'></span></a></li>";
        }
    }
}
?>