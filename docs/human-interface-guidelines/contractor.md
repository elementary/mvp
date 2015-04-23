# Contractor {#contractor}

Contractor is a service and a protocol for exposing services easily between apps. It allows an app to interact with various other apps/services without hardcoding support for them. You simply add contractor support, and then any service registered with contractor is now available for your app to use. Your app can integrate with contractor in two different ways:

* Register one of it's functions as a service that can be used from other apps
* Implement the contractor menu or otherwise access contractor to receive a list of services that can handle the data your app manages

## Displaying Results from Contractor {#displaying-results-from-contractor}

The most typical way to present Contractor results to users is in menu form. Keep in mind the following things when presenting contractor results:

* If the item acted upon is one of many items visible, such as in an icon view, be sure to display results in a way that is directly related to the item such as in a context menu.
* If the item acted upon is the only item currently visible, such as a web page or a contact in Dexter, contractor can be displayed in a toolbar menu.
* Never display the target app's name. The menu string is the intended display name for that app. Doing so can lead to redundant messages such as, "Set image as wallpaper (wallpaper)" and it is always irrelevant to a user's needs.

#### Next Page: [Dock Integration](/docs/human-interface-guidelines/dock-integration) {.text-right}