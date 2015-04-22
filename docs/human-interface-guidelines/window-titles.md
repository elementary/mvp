# Window Titles {#window-titles}

When dealing with window titles, consider that their main use is in distinguishing one window from another. A good window title will provide a description that helps a user make a selection. Keep that in mind as you consider the following:

* A view window should display the name of the content being viewed.  For example, in Midori the window title reflects the title of the current web page. When looking for a specific window among multiple instances of an app, simply showing the application's name is not helpful.
* A window's title should not show the vendor name or version number of the app.  Adding the version number or vendor name clutters the title and doesn't help to distinguish a window. Additionally, this information is already available from your app's About window.
* Dialogs and alerts should not display a window title. They are distinctive enough in their visual style and are often modal.
* If you need to display more than one item in the title, separate the items with an em dash (—) with space on either side. The helps keep the title clean when you need to show more information.
* Don’t display pathnames in window titles, only the current destination. If you have two paths that are very similar it will be hard to distinguish them when displaying the full path. If you only show the destination, the distinction is clear.

#### Next Page: [Checkboxes & Switches](/docs/human-interface-guidelines/checkboxes-switches) {.text-right}
