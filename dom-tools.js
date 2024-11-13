function createUlElement(items) {
  const ulElement = document.createElement('ul');
  for (const item of items) {
    const liElement = createLiElement(item);
    ulElement.appendChild(liElement);
  }
  return ulElement;
}

function createLiElement(text) {
  const liElement = document.createElement('li');
  liElement.appendChild(document.createTextNode(text));
  return liElement;
}
