# Temple for Leantime plugin

This is a sample plugin for Leantime version 3.x.

You can clone/download this example plugin into `app/Plugins/PluginTemplate` and then refactor the folder name and
update the namespace to start creating you own plugin. 

### Prepare Plugin
1. Copy the plugin template into the Plugins/ folder 
2. Rename the plugin and all associated namespaces to your plugin name
3. Update the composer.json
4. Go to your Leantime instance->Plugins->Installed Plugins
5. The new plugin should show up already nad be available to install and enable


### Language Assets
Language assets are added via middleware. Make sure `GetLanguageAssets.php` is included and the cache locations have 
been renamed. The middleware has to be registered in the register.php. 


