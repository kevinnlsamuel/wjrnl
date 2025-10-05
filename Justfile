PROJECT := 'wjrnl'

dev:
	podman run \
		--interactive --tty --rm \
		--publish 5678:5678 \
		--network=pasta:--ipv4-only \
		--name {{PROJECT}}-dev \
		--volume ./site:/srv/wjrnl \
		{{PROJECT}}:development
run:
	podman run \
		--interactive --tty --rm \
		--publish 5678:5678 \
		--network=pasta:--ipv4-only \
		--name {{PROJECT}} \
		{{PROJECT}}:production

containerise flavour="production":
	#!/bin/sh
	set -e

	TAG='production'
	FILE='Containerfile'

	if echo "{{flavour}}" | grep -Eq 'dev(elop(ment)?)?'; then
		TAG='development'
		FILE='Containerfile.development'
	fi

	podman build --tag {{PROJECT}}:"${TAG}" --file "${FILE}"
