const buttons = Array.from(
  document.querySelectorAll('[data-toggle-class-target]')
);

buttons.map(button => {
  button.addEventListener('click', () => {
    const targetSelector = button.getAttribute(
      'data-toggle-class-target'
    );
    const targets = Array.from(
      document.querySelectorAll(targetSelector)
    );
    const shouldCloseOthers = button.hasAttribute(
      'data-toggle-class-close-others'
    );

    if (shouldCloseOthers) removeClassesFromAll(button);

    toggleClasses(button, targets);
  });
});

const removeClassesFromAll = button => {
  const buttonId = button.getAttribute('data-toggle-class-id');
  const buttonsGroup = Array.from(
    document.querySelectorAll(`[data-toggle-class-id="${buttonId}"]`)
  );

  buttonsGroup.map(button => {
    const targetSelector = button.getAttribute(
      'data-toggle-class-target'
    );
    const targets = Array.from(
      document.querySelectorAll(targetSelector)
    );

    button.classList.remove('is-active');
    button.setAttribute('data-opened', false);
    targets.map(target => target.classList.remove('is-active'));
  });
};

const toggleClasses = (element, targets) => {
  const isOpened = element.getAttribute('data-opened') === 'true';
  const toggleMode = !isOpened ? 'add' : 'remove';

  element.classList[toggleMode]('is-active');
  element.setAttribute('data-opened', !isOpened);
  targets.map(target => target.classList[toggleMode]('is-active'));
};
