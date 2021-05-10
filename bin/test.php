<?hh

function fibonacci(int $number): int {
  return \intval(\round(\pow((\sqrt(5.0) + 1) / 2, $number) / \sqrt(5.0)));
}

<<__EntryPoint>>
async function main_tes_async(): Awaitable<void> {
  $n = (int)(vec(\HH\global_get('argv') as Container<_>)[1] ?? 10);
  echo 'The '.$n.' number in fibonacci is: '.fibonacci($n).\PHP_EOL;
}
