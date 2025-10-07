PROJECT := 'wjrnl'

replay: down play
play:
	podman kube play dev.k8s.yml
down:
	podman kube down dev.k8s.yml

run:
	podman run \
		--interactive --tty --rm \
		--publish 5678:5678 \
		--network=pasta:--ipv4-only \
		--name {{PROJECT}} \
		{{PROJECT}}:production

containerise:
	podman build --tag {{PROJECT}}:production --file "Containerfile"

build-dev-images:
	podman build --tag wjrnl-php:development --file Containerfile.development
	podman build --tag tailwindcss:development --file Containerfile.tailwindcss.development
