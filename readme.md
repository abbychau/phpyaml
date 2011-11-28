# phpyaml

Or a *simple* yaml -> php array script.

## History?

1. I was looking at jekyll, which is a cool project, but I didn't really want to use it's funky setup (I mean, why use somebody else's funky setup when you can use your own?).
2. I was bored, and thought about maybe creating a php clone of jekyll, with maybe a few differences.
3. Didn't want to get started on large scale project tonight, but didn't mind tackling a small part of it.
4. We now have this really simple script.

## Using?

Open up your php file and add in `require_once "[path/to/]phpyaml.php";` somewhere before you actually want to get your yaml in array format.

After you've added that, you can do any one of the following:

`$arr = yamlToArray("[path/to/]sample.yaml");` if you have your yaml in a file, or

`$arr = yamlTextToArray("[string of yaml]")` if you have your yaml as a string.

## Why?

Bored. Could have future uses.

## Notes?

Don't use this with a complex yaml file, really, stick to single level stuff (nothing tabbed in). You can have all your comments and stuff, and even empty lines, just don't do the weird

	this:
		that: this2
		abc: cde

Please, stick to the much simpler (in the eyes of the script):

	this-that: this2
	this-abc: cde

Oh, you also don't need to have a space after your colon, unless you want it (I'm not sure if that's yaml spec or not).

## Additionally?

Have fun?