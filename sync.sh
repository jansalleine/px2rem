#!/bin/sh
rsync -azP --delete ./public/ spider@vmisery:/var/www/px2rem.jesus-rocks.com
