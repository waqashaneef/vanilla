<?php if (!defined('APPLICATION')) exit();

/**
 * Lussumo.Garden.Modules
 */

/**
 * Renders the "Start a New Discussion" button.
 */
class NewDiscussionModule extends Module {

   public function AssetTarget() {
      return 'Panel';
   }
   
   public function ToString() {
      $Session = Gdn::Session();
      if ($Session->IsValid())
         return parent::ToString();

      return '';
   }   
}