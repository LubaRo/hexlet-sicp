(define (element-of-set? x set)
  (cond ((null? set) false)
        ((equal? x (car set)) true)
        (else (element-of-set? x (cdr set)))))

(define (adjoin-set x set)
  (if (element-of-set? x set)
      set
      (cons x set)))

(define (union-set set1 set2)
  (define (join set1 set2)
    (if (null? set2)
        set1
        (join
         (adjoin-set (car set2) set1)
         (cdr set2))))
  (if (null? set1)
      set2
      (join set1 set2)))
