//https://www.tinkercad.com/things/kh8tBJEAHT8/editel

//varíaveis para especificar as portas do arduino
int carroVermelho = 13; 
int carroAmarelo = 12; 
int carroVerde = 11; 
int pessoaVerde = 2;
int pessoaVermelho = 3; 
int botao = 7;
int tempoAtravessando = 5000;
unsigned long mudaTempo;
 
void setup() {
  
  // Inicializamos o temporizador aqui
  // Observe que o "contador" foi atrelado
  // a váriavel que setamos acima.
  
  //Millis é como se fosse um cronometro
  mudaTempo = millis();
  

  //especifica se as portas são entrada ou saída
  pinMode(carroVermelho, OUTPUT);
  pinMode(carroAmarelo, OUTPUT);
  pinMode(carroVerde, OUTPUT);
  pinMode(pessoaVermelho, OUTPUT);
  pinMode(pessoaVerde, OUTPUT);
  pinMode(botao, INPUT);
  
  //dá o start no semaforo
  digitalWrite(carroVerde, HIGH);
  digitalWrite(pessoaVermelho, HIGH);
  digitalWrite(carroVermelho, LOW);
  digitalWrite(carroAmarelo, LOW);
  digitalWrite(pessoaVerde, LOW);
  //dá um tempo de 9600 segundos
  Serial.begin(9600);
}
 
void loop() {
  
  // A variável que vamos setar abaixo servirá para "guardar" o estado do nosso botão (pressionado ou não pressionado)
  
  int estado = digitalRead(botao);
  delay(50);
  Serial.println(estado);
  
  // Se o botão está sendo pressionado E se já passou 5 segundos desde a última pressão.
  
  if (estado == HIGH) {
    //Então SE SIM, executa a função de mudar o estado das luzes abaixo:
    mudaLuzes();
  }
}
 
void mudaLuzes() {
  digitalWrite(carroVerde, LOW);    // A luz verde é desligada
  digitalWrite(carroAmarelo, HIGH); // A luz amarela vai ligar por 4 segundos
  delay(4000); 
  
  digitalWrite(carroAmarelo, LOW); // A luz amarela vai desligar
  digitalWrite(carroVermelho, HIGH); // A luz vermelha vai ligar por 5 segundos
 
  digitalWrite(pessoaVermelho, LOW);
  digitalWrite(pessoaVerde, HIGH);
  delay(tempoAtravessando);
  
  // Pisca a luz verde dos PEDESTRES
  for (int x=0; x<10; x++) {
    digitalWrite(pessoaVerde, LOW);
    delay(160);
    digitalWrite(pessoaVerde, HIGH);
    delay(160);
  }
  digitalWrite(pessoaVerde, LOW);
  digitalWrite(carroVermelho, LOW);
  digitalWrite(pessoaVermelho, HIGH);
  digitalWrite(carroVerde, HIGH);
 
  mudaTempo = millis();
 }