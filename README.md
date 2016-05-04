# Concrete5 Boilerplate Block
In searching for starting points for blocks, I couldn't find anything for 5.7+, so this is an attempt to create a standard directory structure for the quick initialization of new blocks.

## Installation
Copy the folders into a blocks folder for a package. There are a number of placeholder items that a good IDE should allow you to replace globally for the folder:

 - `blockHandle` - this is just the main folder for now, but could include other items. 
 - `Block Name` - Normal Block name.
 - `Block Description` - Normal Block Description
 - `BlockTable` - Block Database table name (omitting the bt, this is already included).
 - `block-handle` - sluggified block handle for html id and classes

## Contributing
Contributions are ALWAYS welcome to make this a better starter block type. I have chosen at this point to omit most helper methods, because every block is different, but if people want more added, please ask or put in a pull request.
