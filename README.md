This is a simple example for a demo website with laravel frontend and kubernetes.

### Instructions to Run:
    1. Run the command `docker-compose up` 
    2. visit http://localhost:80 to play with frontend.

### Objectives
    Create a Kubernetes yaml file that runs 20 replicas of this docker-compose.yml file and the following requirements:
        - Each replica must access its own database only.
        - Each replica must alllow only one client connection (can be done with Ingress)
        - Must include sticky sessions (once a client connects to a replica the connection with the replica stays until connection is closed)
        - To be deployed on a server with a single kubectl command exposing port 80 on that server ( every client that reaches that port will be redirected to one of the replicas)
    
    Additional:
        - Replica must bed destroyed automatically on client disconnection

