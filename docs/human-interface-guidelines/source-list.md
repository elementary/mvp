# Source List {#source-list}

A source list may be used as a high-level form of navigation. Source lists are useful for showing different locations, bookmarks, or categories within your app.

![](/images/docs/human-interface-guidelines/source-list/files.png)

## Sections {#sections}

A source list may be separated into different collapsible sections, each with its own heading. For example, a file manager might have a section for bookmarked locations, a section for storage devices attached to the computer, and a section for network locations. These sections help group related items in the source list and allows the user to hide away sections they might not use.

Avoid nesting expandable sections within a source list if possible; if you find yourself wanting to do this, you may need to rethink the sections.

## Hierarchy {#hierarchy}

Hierarchy is important with source lists, both within the widget itself and within the broader scope of your app.

Sections in the source list should be sorted from most important at the top to least important at the bottom. If you're having a hard time deciding the relative importance of each section, think about which section a user is likely to use more often. Sorting the sections this way ensures that the most important items are always visible, even if the source list is too short to fit all of the items, though of course items at the bottom will still be accessible via scrolling.

A source list goes at the left side of a window (or right side for right-to-left languages). Because the user reads in this direction, the sidebar is reinforced as being before (and therefore at a higher level than) the app's contents. 

#### Next Page: [Popovers](/docs/human-interface-guidelines/popovers) {.text-right}