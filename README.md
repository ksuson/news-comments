# melis-user-tabs

MelisUserTabs is the module that saves opened user tabs on the platform.

## Getting Started

These instructions will get you a copy of the project up and running on your machine.

### Prerequisites

You will need to install melisplatform/melis-core in order to have this module running.
This will automatically be done when using composer.

### Installing

Run the composer command:
```
composer require melisplatform/melis-user-tabs
```

## Tools & Elements provided

* Manage to save all user tabs
* Reopened all saved user tabs

##Running the code

### MelisUserTabs Service

* MelisUserTabsService  
Provides service to get all user tabs.
File: /melis-user-tabs/src/Service/MelisUserTabsService.php  
```
// Get the service
$userTabs = $this->getServiceLocator()->get('MelisUserTabsService');
// Get all user tabs opened by userId
$usesrTabsData = $userTabs->getUserTabsOpenByUserId($userId); 
```

### Javascript Helper provided by melis-core

* melisHelper: Open a tab when selecting a tool from left menu
```  
melisHelper.tabOpen(title, icon, zoneId, melisKey, parameters);  
```  



## Authors

* **Melis Technology** - [www.melistechnology.com](https://www.melistechnology.com/)

See also the list of [contributors](https://github.com/melisplatform/melis-front/contributors) who participated in this project.


## License

This project is licensed under the OSL-3.0 License - see the [LICENSE.md](LICENSE.md) file for details