/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
//    config.filebrowserBrowseUrl         = base_url().'assets/kcfinder/browse.php?type=files';
//    config.filebrowserImageBrowseUrl    = base_url().'assets/kcfinder/browse.php?type=images';
//    config.filebrowserFlashBrowseUrl    = base_url().'assets/kcfinder/browse.php?type=flash';
//    config.filebrowserUploadUrl         = base_url().'assets/kcfinder/upload.php?type=files';
//    config.filebrowserImageUploadUrl    = base_url().'assets/kcfinder/upload.php?type=images';
//    config.filebrowserFlashUploadUrl    = base_url().'assets/kcfinder/upload.php?type=flash';
    
    config.filebrowserBrowseUrl         = '../../assets/kcfinder/browse.php?type=files';
    config.filebrowserImageBrowseUrl    = '../../assets/kcfinder/browse.php?type=images';
    config.filebrowserFlashBrowseUrl    = '../../assets/kcfinder/browse.php?type=flash';
    config.filebrowserUploadUrl         = '../../assets/kcfinder/upload.php?type=files';
    config.filebrowserImageUploadUrl    = '../../assets/kcfinder/upload.php?type=images';
    config.filebrowserFlashUploadUrl    = '../../assets/kcfinder/upload.php?type=flash';
};
