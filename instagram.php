<?php
// Instagram extension, https://github.com/GiovanniSalmeri/yellow-instagram

class YellowInstagram {
    const VERSION = "0.9.1";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("instagramStyle", "instagram");
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="instagram" && ($type=="block" || $type=="inline")) {
            list($id, $dummy, $style, $width, $height) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($style)) $style = $this->yellow->system->get("instagramStyle");
            if (is_string_empty($width)) $width = "100%";
            $css = $this->getInstagramStyle($width, $height);
            $output = "<div class=\"".htmlspecialchars($style)."\" style=\"".htmlspecialchars($css)."\">";
            $output .= "<blockquote class=\"instagram-media\" data-instgrm-captioned style=\"".htmlspecialchars($css)."display:none;\">";
            $output .= "<a href=\"https://www.instagram.com/p/".htmlspecialchars($id)."/\">Instagram</a>";
            $output .= "</blockquote></div>";
        }
        return $output;
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $assetLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreAssetLocation");
            $output = "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}instagram.js\"></script>\n";
        }
        return $output;
    }

    // Return CSS style
    public function getInstagramStyle($width, $height) {
        $css = "";
        if (is_numeric($width)) $width .= "px";
        if (is_numeric($height)) $height .= "px";
        if (!is_string_empty($width)) $css .= " width:$width;";
        if (!is_string_empty($height)) $css .= " height:$height;";
        return trim($css);
    }
}
