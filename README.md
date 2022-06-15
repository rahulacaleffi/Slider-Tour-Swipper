# Slider-Tour-Swipper
 Travel Destinations Slider using Swipper JS Core

# Installation
 Just upload the folder 'Slider-Tour-Swipper' into yours active theme root, and setup functions guide above

## functions.php
```
 // The shortcode function
 function create_shortcode_slider() { 
	get_template_part('Slider-Tour-Swipper/slider');
 }
 // Register shortcode
 add_shortcode('shortcode-slider', 'create_shortcode_slider'); 
```

# Usage
 Use the shortcode [shortcode-slider] everywhere you want, but one time per page maximum (avoiding duplicate the JS import files)
