#!/bin/sh

set -e

build()
{
	printf '\n%s\n' 'Starting build ...'
	mkdir -p dist

	for FILE in html/*; do
		FILENAME=$(basename "$FILE")
		printf '\n%s %s\n' 'Building:' "$FILENAME"

		if [ "$FILENAME" != 'index.html' ]; then
			sed '/{{HEADER}}/r inc/_header.html' "$FILE" | sed '/{{HEADER}}/D' | sed '/{{LOGONAV}}/r inc/_logonav.html' | sed '/{{LOGONAV}}/D' > "dist/$FILENAME"
		else
		    sed '/{{HEADER}}/r inc/_header.html' "$FILE" | sed '/{{HEADER}}/D' | sed '/{{LOGONAV}}/r inc/_logonav.html' | sed '/{{LOGONAV}}/D' | sed '/{{NEWS}}/r inc/_news.html' | sed '/{{NEWS}}/D' > "dist/$FILENAME"
        fi
	done

	cp assets/* dist/
	printf '%s\n\n' 'Done!'
}

installation()
{
	if [ ! -d dist ]; then
		printf '\n%s\n\n' 'Please build first: ./build.sh'
		exit 1
	fi
	
	INSTDIR=/var/www/htdocs

	printf '\n%s %s\n' 'Installing to' "$INSTDIR"

	for FILE in dist/*; do
		FILENAME=$(basename "$FILE")
		EXT=$(echo "$FILENAME" | cut -d'.' -f2)

		if [ "$EXT" = 'php' ] || [ "$EXT" = 'cgi' ]; then
			install -m755 "$FILE" "$INSTDIR/$FILENAME"
		else
			install -m644 "$FILE" "$INSTDIR/$FILENAME"
		fi
	done

	printf '%s\n\n' 'Done!'
}

clean()
{
	printf '\n%s\n\n' 'Cleaning ...'
	rm -rf dist
}

case "$1" in
	install)
		installation; exit ;;
	clean)
		clean; exit ;;
	*)
		build
esac