<?php require_once( 'couch/cms.php' ); ?>
   <cms:embed 'lang_getter.html' />
   <cms:template>
      <cms:editable name="photo" type="image" />
      <cms:editable name="content_en" type="textarea" />
      <cms:editable name="content_fr" type="textarea" />
      <cms:editable name="content_es" type="textarea" />
   </cms:template>
  
   <h1>Language Test</h1>
   <cms:embed 'lang_switcher_menu.html' />
   <p> <img src="<cms:show photo />" /> </p>
  
   <cms:get "content_<cms:show my_lang />" />
   
<?php COUCH::invoke(); ?>