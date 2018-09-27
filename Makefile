.PHONY= gcp
run:
        @kubectl run test-app --image=docker.io/dockingdaddy/my-lamp-app --port=80
deploy: run
        @kubectl expose deployment test-app --type=LoadBalancer --port=80 --target-port=80
delete:
        @kubectl delete deployment test-app
        @kubectl delete svc test-app