const WebSocket = require('ws');
const wss = new WebSocket.Server({ port: 8080 });

let numClients = 0;

wss.on('connection', (ws) => {
  console.log('New client connected');
  numClients++;
  console.log(`Current Online Users: ${numClients}`);
  ws.send(numClients);
//   ws.send('Hello, client!');
  ws.on('close', () => {
      console.log('Client disconnected');
      
      numClients--;
      console.log(`Current Online Users: ${numClients}`);
  });
});
